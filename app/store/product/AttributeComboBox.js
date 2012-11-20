Ext.define('Admin.store.product.AttributeComboBox', {
    extend : 'Ext.data.Store',
    model : 'Admin.model.product.AttributeComboBox',
    proxy: {
        type: 'rest',
        url: '/product/attribute',
        actionMethods: {
            read   : 'GET'
        },
        reader : {
            type : 'json',
            root : 'attributes'
        }
    }
});