<?php
/**
 * @file
 * bfw_rules_reservation.rules_defaults.inc
 */

/**
 * Implements hook_default_rules_configuration().
 */
function bfw_rules_reservation_default_rules_configuration() {
  $items = array();
  $items['rules_reservation_accepted'] = entity_import('rules_config', '{ "rules_reservation_accepted" : {
      "LABEL" : "Reservation Accepted",
      "PLUGIN" : "reaction rule",
      "OWNER" : "rules",
      "TAGS" : [ "Reservation" ],
      "REQUIRES" : [ "rules" ],
      "ON" : { "node_update--reservation" : { "bundle" : "reservation" } },
      "IF" : [
        { "NOT data_is" : {
            "data" : [ "node:field-reservation-status" ],
            "value" : [ "node-unchanged:field-reservation-status" ]
          }
        },
        { "data_is" : { "data" : [ "node:field-reservation-status" ], "value" : "acceptee" } }
      ],
      "DO" : [
        { "mail" : {
            "to" : [ "node:field-reservation-email" ],
            "subject" : "Validation de votre r\\u00e9servation chez Ben\\u0027s Faster Way",
            "message" : "Cher(e) [node:field-reservation-firstname],\\r\\n\\r\\nVotre demande de r\\u00e9servation pour la course du [node:field-reservation-date] au d\\u00e9part de [node:field-reservation-start-address] jusqu\\u0027\\u00e0 [node:field-reservation-end-address] a \\u00e9t\\u00e9 valid\\u00e9e.\\r\\nVous recevrez une notification de rappel quelques heures avant la course.\\r\\n\\r\\nA bient\\u00f4t.\\r\\n\\r\\nL\\u0027\\u00e9quipe BFW",
            "language" : [ "" ]
          }
        }
      ]
    }
  }');
  $items['rules_reservation_add'] = entity_import('rules_config', '{ "rules_reservation_add" : {
      "LABEL" : "Reservation Add",
      "PLUGIN" : "reaction rule",
      "OWNER" : "rules",
      "TAGS" : [ "Reservation" ],
      "REQUIRES" : [ "rules" ],
      "ON" : { "node_insert--reservation" : { "bundle" : "reservation" } },
      "DO" : [
        { "mail" : {
            "to" : "[node:field-reservation-email]",
            "subject" : "Votre r\\u00e9servation chez Ben\\u0027s Faster Way",
            "message" : "Votre demande de r\\u00e9servation a bien \\u00e9t\\u00e9 enregistr\\u00e9e, vous recevrez une confirmation dans les prochaines heures.",
            "language" : [ "" ]
          }
        },
        { "mail" : {
            "to" : "aurelien.budzinski@gmai.com",
            "subject" : "Nouvelle demande de r\\u00e9servation ",
            "message" : "Une nouvelle demande de course a \\u00e9t\\u00e9 r\\u00e9alis\\u00e9e : \\r\\n\\r\\nVoici les informations correspondantes :\\r\\n[node:field-reservation-firstname]\\r\\n[node:field-reservation-lastname]\\r\\n[node:field-reservation-phone-number]\\r\\n[node:field-reservation-email]\\r\\n\\r\\nPour le trajet \\r\\nD\\u00e9part : [node:field-reservation-start-address]\\r\\nArriv\\u00e9e : [node:field-reservation-end-address]\\r\\nDate : [node:field-reservation-date]\\r\\nNombre de personnes : [node:field-reservation-num-persons]\\r\\nBagages : [node:field-reservation-num-suitcases]\\r\\n\\r\\nPrix de la course : [node:field_reservation_price]\\r\\n\\r\\nN\\u0027oubliez pas de valider la course ou de la refus\\u00e9e.",
            "language" : [ "" ]
          }
        }
      ]
    }
  }');
  return $items;
}
