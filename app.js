Ext.Loader.setConfig({
    enabled: true
});
Ext.application({

    name: 'Admin',

    appFolder: '/admin/apps/admin/app',

    autoCreateViewport: true,

    refs: [
        {
            ref: 'pageContent',
            selector: '#pageContent'
        },
        {
            ref: 'pageSidebar',
            selector: 'pageSidebar'
        }

    ],

    controllers : ['Layout'],

    init : function(){

    },

    launch : function() {
        if(location.hash.substr(1).length > 0){
            this.setRouter(location.hash.substr(1));
        }

    },

    /**
     *
     * @param routerUrl
     */
    setRouter : function(routerUrl){
        var r = this.routerParse(routerUrl);
        try {
            var controller = this.getController(r.controllerPath);
                controller.init(this);
                controller['action'+ r.actionName]();
            this.setLocationHash(r.controllerPath, r.actionName);
        } catch(e) {
            Ext.MessageBox.alert('Hata','Kontrol yuklenirken hata olustu\n' + e);
        }
    },

    /**
     *
     * @param routerUrl
     * @return {Object}
     */
    routerParse : function(routerUrl){
        var routeUrlArray = routerUrl.split('.') , actionName = '', controllerPath = '';
        for(var sec = 0; routeUrlArray.length-1 > sec; sec++ ){
                controllerPath += '.' + routeUrlArray[sec];
        }
        controllerPath = controllerPath.substr(1);
        actionName = routeUrlArray[routeUrlArray.length-1];
        return {'controllerPath' : controllerPath , 'actionName' : actionName};
    },

    setLocationHash : function(){
        var locationString = arguments[0] + '.' + arguments[1];
        location.hash = locationString;
    },

    /**
     *
     * @param className
     */
    setContent : function(className, title){
        var pageContent = this.getPageContent(), title;
        className = 'Admin.view.' + className;
        try {
            pageContent.setTitle(title);
            document.title = title;

            pageContent.removeAll();
            pageContent.add( Ext.create(className) );
        } catch(e) {

            Ext.MessageBox.alert('Hata','Gorunum yuklenirken hata olustu : \n '+ e);
        }

    }
});
