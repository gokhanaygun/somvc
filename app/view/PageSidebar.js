Ext.define('Admin.view.PageSidebar', {
    extend: 'Ext.tree.Panel',
    xtype: 'pageSidebar',
    rootVisible: false,
    alias : 'widget.pageSidebar',
    lines: false,
    useArrows: true,
    
    store: 'Menu'
});
