Ext.define('Admin.store.product.FeatureComboBox', {
    extend : 'Ext.data.Store',
    model : 'Admin.model.product.FeatureComboBox',
    proxy: {
        type: 'rest',
        url: '/product/categoryfeature/?id=1&deep2=1',
        actionMethods: {
            read   : 'GET'
        },
        reader : {
            type : 'json',
            root : 'feature'
        }
    }
});