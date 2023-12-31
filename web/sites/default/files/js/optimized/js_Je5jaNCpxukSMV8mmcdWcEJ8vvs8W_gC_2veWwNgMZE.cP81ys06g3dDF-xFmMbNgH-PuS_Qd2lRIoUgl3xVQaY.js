/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/
var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

(function (Backbone, Drupal) {
  Drupal.addToCart.AddToCartModel = Backbone.Model.extend({
    defaults: {
      defaultVariation: '',
      selectedVariation: '',
      attributeOptions: {},
      injectedFields: {},
      variations: {},
      variationCount: 0,
      type: 'commerce_product_variation_attributes',
      quantity: 0
    },
    initialize: function initialize() {

      var variationKeys = Object.keys(this.get('variations'));

      variationKeys.forEach(function (uuid) {
        var potentiallyUnexpectedVariation = this.getVariation(uuid);

        // check, if we have a HAL data structure
        if (potentiallyUnexpectedVariation.sku.length) {
          Object.keys(potentiallyUnexpectedVariation).forEach(function (attr) {
            // ignore the _ attributes
            if (attr.substr(0, 1) !== '_') {
              potentiallyUnexpectedVariation[attr] = potentiallyUnexpectedVariation[attr][0].value ? potentiallyUnexpectedVariation[attr][0].value : potentiallyUnexpectedVariation[attr][0];
            }
          });
        }
      }.bind(this))

      this.set('variationCount', variationKeys.length);
      this.set('selectedVariation', this.getVariation(this.get('defaultVariation')));
    },
    getDefaultVariation: function getDefaultVariation() {
      return this.get('defaultVariation');
    },
    getAttributes: function getAttributes() {
      return this.get('attributeOptions')[this.getSelectedVariation().uuid].attributes;
    },
    getVariations: function getVariations() {
      return this.get('variations');
    },
    getVariation: function getVariation(uuid) {
      return this.attributes['variations'][uuid];
    },
    getResolvedVariation: function getResolvedVariation(selectedAttributes) {
      var _this = this;

      function getSelectedAttributeValueId(fieldName) {
        if (_typeof(selectedAttributes[fieldName]) === 'object') {
          return selectedAttributes[fieldName].attribute_value_id.toString();
        }
        return selectedAttributes[fieldName].toString();
      }
      function getVariationAttributeValueId(fieldName, variation) {
        if (!variation.hasOwnProperty(fieldName)) {
          return '';
        }
        if (_typeof(variation[fieldName]) === 'object') {
          return variation[fieldName].attribute_value_id.toString();
        }
        return variation[fieldName].toString();
      }

      var attributes = [].concat(_toConsumableArray(this.getAttributes()));
      var variations = Object.keys(this.getVariations()).map(function (key) {
        return _this.getVariation(key);
      });
      var selectedVariation = null;

      while (attributes.length > 0) {
        var _iteratorNormalCompletion = true;
        var _didIteratorError = false;
        var _iteratorError = undefined;

        try {
          for (var _iterator = variations[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
            var variation = _step.value;

            var match = true;
            var _iteratorNormalCompletion2 = true;
            var _didIteratorError2 = false;
            var _iteratorError2 = undefined;

            try {
              for (var _iterator2 = attributes[Symbol.iterator](), _step2; !(_iteratorNormalCompletion2 = (_step2 = _iterator2.next()).done); _iteratorNormalCompletion2 = true) {
                var attribute = _step2.value;

                var fieldName = 'attribute_' + attribute.id;
                if (getVariationAttributeValueId(fieldName, variation) !== getSelectedAttributeValueId(fieldName)) {
                  match = false;
                }
              }
            } catch (err) {
              _didIteratorError2 = true;
              _iteratorError2 = err;
            } finally {
              try {
                if (!_iteratorNormalCompletion2 && _iterator2.return) {
                  _iterator2.return();
                }
              } finally {
                if (_didIteratorError2) {
                  throw _iteratorError2;
                }
              }
            }

            if (match) {
              selectedVariation = variation;
              break;
            }
          }
        } catch (err) {
          _didIteratorError = true;
          _iteratorError = err;
        } finally {
          try {
            if (!_iteratorNormalCompletion && _iterator.return) {
              _iterator.return();
            }
          } finally {
            if (_didIteratorError) {
              throw _iteratorError;
            }
          }
        }

        if (selectedVariation !== null) {
          break;
        }

        attributes.pop();
      }
      return selectedVariation;
    },
    getSelectedVariation: function getSelectedVariation() {
      return this.attributes['selectedVariation'];
    },
    setSelectedVariation: function setSelectedVariation(uuid) {
      this.set('selectedVariation', this.getVariation(uuid));
    },
    getVariationCount: function getVariationCount() {
      return this.get('variationCount');
    },
    getRenderedAttribute: function getRenderedAttribute(fieldName) {
      return this.get('attributeOptions')[this.getSelectedVariation().uuid].renderedAttributes[fieldName];
    },
    getInjectedFieldsForVariation: function getInjectedFieldsForVariation(uuid) {
      return this.attributes['injectedFields'][uuid];
    },
    getType: function getType() {
      return this.attributes['type'];
    },
    setQuantity: function setQuantity(quantity) {
      this.set('quantity', quantity);
    },
    getQuantity: function getQuantity() {
      return this.attributes['quantity'];
    }
  });
})(Backbone, Drupal);
