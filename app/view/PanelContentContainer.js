Ext.define('Admin.view.PanelContentContainer', {
    extend: 'Ext.Container',
    requires: [
        'Ext.layout.container.VBox',
        'Ext.panel.Panel'
    ],

    layout: {
        type: 'vbox',
        align: 'center',
        pack: 'center'
    },
    
    defaults: {
        defaults: {
            width: 200,
            height: 200,
            bodyPadding: 10,
            autoScroll: true,
            margin: 10
        },

        margin: '0 0 10 0'
    }
});
