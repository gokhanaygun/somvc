Ext.define('Admin.controller.product.Category', {

    extend: 'Ext.app.Controller',

    stores : [
        'product.Category',
        'product.AttributeComboBox',
        'product.FeatureComboBox'
    ],

    views : [
        'admin.product.Category'
    ],

    models : [
        'product.Category'
    ],

    refs: [{
        ref: 'refCategoryTree',
        selector: 'categoryTree'
        }
    ],

    init : function() {
        this.control({
            'categoryManager treepanel' : {
                itemcontextmenu : function(){
                    alert('aa');
                    return false;
                },
                itemclick : this.fillForm

            },
            'categoryManager #treeForm button[action = Save]' : {
                click : this.saveForm
            }
        });
    },
    fillForm : function(view, records){
        var form = Ext.getCmp('treeForm');

        form.load({
            url : '/product/category',
            params: {
                id: records.get('id')
            },
            method : 'GET',
            success : function(form, action){
                Ext.getCmp('btnSubmit').setText('Edit');
                console.log('form filled');
            },
            failure: function(form, action) {
                Ext.Msg.alert("Load failed", action.result);
            }
        });

    },
    saveForm : function(){
        var form = Ext.getCmp('treeForm').getForm();
        if (form.isValid()) {
            form.submit({
                    url: 'index/category',
                    success : function(){
                        alert('eklendi');
                    },
                    failure : function(){
                        alert('eklenemedi');
                    }
                });
        } else {
            alert('error');
        }
    },
    actionIndex : function(){
        this.application.setContent('admin.product.Category','Category Manager');
    }

});