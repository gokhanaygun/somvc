Ext.define('Admin.model.product.AttributeComboBox', {
    extend: 'Ext.data.Model',
    fields: [
        {name:'name', type: 'string',mapping:'name'},
        {mapping:'idProductCategoryAttribute', name:'abbr', type : 'int'}
    ]
});