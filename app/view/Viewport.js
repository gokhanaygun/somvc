Ext.define('Admin.view.Viewport', {
    extend: 'Ext.container.Viewport',
    requires: [
        'Ext.layout.container.Border',
        'Ext.layout.container.HBox',
        'Admin.view.PageSidebar',
        'Admin.view.Header'

    ],
    layout: 'border',
    items: [
        {
            region: 'north',
            xtype : 'pageHeader',
            autoHeight: true,
            split: true
        },

        {
            region: 'center',

            layout: {
                type : 'hbox',
                align: 'stretch'
            },

            items: [
                {
                    width: 250,
                    bodyPadding: 5,
                    xtype: 'pageSidebar',
                    autoWidth: true,
                    shadow : true,
                    split: true
                },

                {

                    flex: 1,
                    title: '&nbsp;',
                    id   : 'pageContent',
                    layout: {
                        type: 'vbox'
                    },
                    overflowY: 'auto',
                    bodyPadding: 0
                }
            ]
        }
    ]


});
