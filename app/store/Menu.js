Ext.define('Admin.store.Menu', {
    extend: 'Ext.data.TreeStore',

    root: {
        expanded: true,
        children: [
            {
                text: 'Product',
                expanded: true,
                qtitle : 'product',
                title: 'Product',
                children: [
                    { leaf: true, text: 'Category', qtitle : 'product.Category.Index', title : 'Category Manager' },
                    { leaf: true, text: 'Feature', qtitle : 'product.Feature.Index', title : 'Feature Manager' },
                    { leaf: true, text: 'Attribute', qtitle : 'product.Attribute.Index' , title: 'Attribute Manager' }
                ]
            },
            {
                text: 'Member',
                expanded: true,
                qtitle : 'member',
                title: 'Member',
                children: [
                    { leaf: true, text: 'All Member', qtitle : 'member.Member.Index', title : 'Member' }
                ]
            }
        ]
    }
});
