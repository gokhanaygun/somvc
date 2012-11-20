Ext.Loader.setConfig({
    disableCaching: true
});
Ext.define('Admin.view.admin.product.Category', {
    extend: 'Admin.view.PanelContentContainer',
    alias : 'widget.categoryManager',
    requires : [
        'Ext.ux.form.field.BoxSelect'
    ],
    defaults: {

        layout: {
            type : 'hbox',
            region: 'west'

        }
    },

    items: [
        {
            items: [
                {
                    region : 'west',
                    title: 'Category',
                    id : 'categoryTree',
                    viewConfig: {
                        plugins: {
                            ptype: 'treeviewdragdrop'
                        }
                    },
                    dockedItems: [{
                        xtype: 'toolbar',
                        items: [{
                            text: 'Add'
                        }, {
                            text: 'Delete'
                        }]
                    }],
                    expanded : true,
                    xtype: 'treepanel',
                    store: 'product.Category',
                    width: 300,
                    height: 500,
                    rootVisible: false,
                    useArrows: true
                },
                {
                    items: [{
                        xtype: 'form',
                        frame: true,
                        height: 400,
                        width: 720,
                        layout: 'anchor',
                        id : 'treeForm',
                        border: true,
                        bodyPadding: 10,
                        fieldDefaults: {
                            labelAlign: 'top',
                            labelWidth: 100
                        },
                        defaults: {
                            anchor: '100%',
                            margins: '0 0 10 0'
                        },
                        items: [
                            {
                                xtype: 'hidden',
                                name : 'id'
                            },
                            {
                                xtype: 'textfield',
                                fieldLabel: 'Name',
                                name : 'name',
                                allowBlank: false
                            },
                            {
                                xtype : 'boxselect',
                                store : 'product.AttributeComboBox',
                                name: 'attributes',
                                displayField: 'name',
                                valueField: 'abbr',
                                multiSelect : true,
                                fieldLabel: 'Attribute',
                                allowBlank: false,

                                allowQueryAll : false,
                                forceSelection : true,
                                typeAhead: true,
                                triggerAction: 'all',
                                delimiter : ','
                            },
                            {
                                xtype : 'boxselect',
                                store : 'product.FeatureComboBox',
                                name: 'features',
                                displayField: 'name',
                                valueField: 'abbr',
                                multiSelect : true,
                                fieldLabel: 'Feature',
                                allowBlank: false,
                                allowQueryAll : false,
                                forceSelection : true,
                                typeAhead: true,
                                triggerAction: 'all',
                                delimiter : ','
                            },

                            {
                                xtype: 'radiogroup',
                                anchor: '30%',
                                fieldLabel: 'Status',
                                items : [
                                    { width: 100 , boxLabel: 'Approved', name: 'pc_status', inputValue: true },
                                    { boxLabel: 'Disapprove', name: 'status', inputValue: false, checked: true}
                                ]

                            },
                            {
                                xtype: 'textareafield',
                                fieldLabel: 'Description',
                                name : 'description',
                                labelAlign: 'top',
                                flex: 1,
                                margins: '0',
                                allowBlank: false
                            }],
                        buttons: [{
                            text: 'Cancel'
                        },
                            {
                                text: 'Save',
                                action : 'Save',
                                id : 'btnSubmit'
                            }]
                    }]


                }
            ]
        }
    ]
});