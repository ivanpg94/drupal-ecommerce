/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/
var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

(function ($, Backbone, _, Drupal, drupalSettings) {
  Drupal.addToCart.AddToCartView = Backbone.View.extend({
    initialize: function initialize() {
      var defaultVariation = this.model.getVariation(this.model.getDefaultVariation());
      this._populateSelectedAttributes(defaultVariation);
      this.render();
    },

    events: {
      'click .form-submit': 'addToCart',
      'change .attribute-widgets input[type="radio"]': 'onAttributeChange',
      'change .attribute-widgets select': 'onAttributeChange',
      'change .variations-select select': 'onVariationTitleChange',
      'change .quantity input[type="number"]': 'onQuantityChange'
    },
    _populateSelectedAttributes: function _populateSelectedAttributes(variation) {
      var _this = this;

      _.each(this.model.getAttributes(), function (attribute, i) {
        var attributeFieldName = 'attribute_' + attribute.id;
        _this.selectedAttributes[attributeFieldName] = variation[attributeFieldName];
      });
    },
    _injectVariationFields: function _injectVariationFields(variation) {
      var injectedFields = this.model.getInjectedFieldsForVariation(variation.uuid);
      Object.values(injectedFields).map(function (injectedField) {
        return $('.' + injectedField.class).replaceWith(injectedField.output);
      });
    },
    onVariationTitleChange: function onVariationTitleChange(event) {
      Drupal.detachBehaviors();
      var selectedVariation = this.model.getVariation(event.target.value);
      this.model.setSelectedVariation(selectedVariation.uuid);
      this._injectVariationFields(selectedVariation);
      Drupal.attachBehaviors();
    },
    onAttributeChange: function onAttributeChange(event) {
      Drupal.detachBehaviors();
      this.selectedAttributes[event.target.name] = parseInt(event.target.value, 10);
      var selectedVariation = this.model.getResolvedVariation(this.selectedAttributes);
      this.model.setSelectedVariation(selectedVariation.uuid);
      this._populateSelectedAttributes(selectedVariation);
      this._injectVariationFields(selectedVariation);
      this.render();
      Drupal.attachBehaviors(this.$el.get(0), _.extend({}, drupalSettings, {
        triggeringAttribute: event.target.name,
        selectedAttributes: this.selectedAttributes,
        selectedVariation: selectedVariation
      }));
    },
    onQuantityChange: function onQuantityChange(event) {
      var value = event.target.value >= 1 ? event.target.value : "1.00";
      this.model.setQuantity(parseInt(value));
    },
    addToCart: function addToCart() {
      var selectedVariation = this.model.getSelectedVariation();
      var quantity = this.model.getQuantity();
      $.ajax({
        url: Drupal.url('cart/add?_format=json'),
        method: 'POST',
        data: JSON.stringify([{
          purchased_entity_type: 'commerce_product_variation',
          purchased_entity_id: selectedVariation.variation_id,
          quantity: quantity
        }]),
        contentType: 'application/json;',
        dataType: 'json'
      }).done(function () {
        Drupal.cartFlyout.fetchCarts();
        Drupal.cartFlyout.flyoutOffcanvasToggle();
      });
    },
    render: function render() {
      if (this.model.getVariationCount() === 1) {
        var html = ['<div class="variations-common-elements">'];
        html.push(Drupal.theme('addToCartQuantity'));
        html.push(Drupal.theme('addToCartButton'));
        html.push('</div>');
        this.$el.html(html.join(''));
      } else if (this.model.getAttributes().length === 0 || this.model.getType() !== 'commerce_product_variation_attributes') {
        var _html = ['<div class="variations-select form-group">'];

        var variations = this.model.getVariations();
        _html.push(Drupal.theme('addToCartVariationSelect', {
          variations: Object.keys(variations).map(function (uuid) {
            return variations[uuid];
          })
        }));

        _html.push('</div>');
        _html.push('<div class="variations-common-elements">');
        _html.push(Drupal.theme('addToCartQuantity'));
        _html.push(Drupal.theme('addToCartButton'));
        _html.push('</div>');
        this.$el.html(_html.join(''));
      } else {
        var view = this;
        var _html2 = ['<div class="attribute-widgets form-group">'];
        var currentVariation = view.model.getSelectedVariation();
        this.model.getAttributes().forEach(function (entry) {
          var defaultArgs = {
            currentVariation: currentVariation,
            targetVariations: [],
            label: entry.label,
            attributeId: entry.id,
            attributeValues: entry.values,
            activeValue: view.selectedAttributes['attribute_' + entry.id]
          };
          if (_typeof(defaultArgs.activeValue) === 'object') {
            defaultArgs.activeValue = defaultArgs.activeValue.attribute_value_id;
          }
          _.each(entry.values, function (attributeValue) {
            var selectedAttributes = _.extend({}, view.selectedAttributes);
            selectedAttributes['attribute_' + entry.id] = attributeValue.attribute_value_id;
            defaultArgs.targetVariations[attributeValue.attribute_value_id] = view.model.getResolvedVariation(selectedAttributes);
          });

          if (entry.element_type === 'select') {
            _html2.push(Drupal.theme('addToCartAttributesSelect', defaultArgs));
          } else if (entry.element_type === 'radios') {
            _html2.push(Drupal.theme('addToCartAttributesRadios', defaultArgs));
          } else if (entry.element_type === 'commerce_product_rendered_attribute') {
            _html2.push(Drupal.theme('addToCartAttributesRendered', Object.assign({}, defaultArgs, {
              attributeValues: view.model.getRenderedAttribute('attribute_' + entry.id)
            })));
          }
        });
        _html2.push('</div>');
        _html2.push('<div class="variations-common-elements">');
        _html2.push(Drupal.theme('addToCartQuantity'));
        _html2.push(Drupal.theme('addToCartButton'));
        _html2.push('</div>');
        this.$el.html(_html2.join(''));
      }
    }
  });
  Drupal.addToCart.AddToCartView.prototype.selectedAttributes = {};
})(jQuery, Backbone, _, Drupal, drupalSettings);