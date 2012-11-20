Ext.define('Admin.store.product.Category', {
    extend: 'Ext.data.TreeStore',
    model : 'Admin.model.product.Category',
    proxy: {
        type: 'rest',
        url: '/product/category.json?allResult=1',
        actionMethods: {
            read   : 'GET',
            update : 'POST'
        },
        writer: {
            type: 'json'
        }
    },
    root: {
        expanded: true

    },
    folderSort: true,
    clearOnLoad: true,
    autoLoad : false ,
    sorters: [{
        property: 'text',
        direction: 'ASC'
    }]

});
