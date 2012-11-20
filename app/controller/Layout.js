Ext.define('Admin.controller.Layout', {
    extend: 'Ext.app.Controller',
    id : 'Layout',
    views : ['Viewport'],
    stores: [
        'Menu'
    ],
    init: function() {
        this.control({
            'pageSidebar': {
                'select': function(me, record, item, index, e) {

                    if (!record.isLeaf()) {

                        return;
                    }
                    this.application.setRouter(record.get('qtitle'));
                }
            }
        });
    },
    actionIndex : function(){
        alert('tets');
    }
});
