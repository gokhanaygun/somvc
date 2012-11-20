Ext.define('Admin.model.product.FeatureComboBox', {
    extend: 'Ext.data.Model',
    fields: [
        {name:'name', type: 'string',mapping:'name'},
        {mapping:'idProductCategoryFeature', name:'abbr', type : 'int'}
    ]
});