Ext.define('Admin.model.product.Category', {
    extend: 'Ext.data.Model',
    fields: [
        {name:'text', type: 'string',mapping:'name'},
        {mapping:'idProductCategory', name:'id', type : 'int'},
        {name:'cls',mapping:'child_count', type : 'string'},
        {name:'leaf', mapping:'leaf', type : 'boolean'},
        {name:'children', mapping:'children', type: 'object'},
        {name:'loaded', type: 'boolean', defaultValue : false}
    ]
});