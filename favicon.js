/**
*
*  Dynamic favicon
*  http://www.webtoolkit.info/
*
**/
 
var DynFavIco = {
 
    // private properties. Browser detect. Do not touch! :)
    IE : ( document.all && document.getElementById && !window.opera ),
    FF : (!document.all && document.getElementById && !window.opera ),
    el : null,
 
    // private method.
    init : function () {
 
        if ( DynFavIco.FF ) {
            document.addEventListener("DOMContentLoaded", DynFavIco.domReady, false);
        } else {
            if ( DynFavIco.IE ) {
 
                document.write("<scr" + "ipt id=__ieinit_DynFavIco defer=true " +
                    "src=//:><\/script>");
 
                var script = document.getElementById("__ieinit_DynFavIco");
                script.onreadystatechange = function() {
                    if ( this.readyState != "complete" ) return;
                    this.parentNode.removeChild( this );
                    DynFavIco.domReady();
                };
 
                script = null;
            } else {
                window.onload = DynFavIco.domReady;
            }
        }
 
    },
 
 
    // private method.
    domReady : function () {
 
        DynFavIco.el = document.createElement('span');
        DynFavIco.el.style.display = 'none';
        document.body.appendChild(DynFavIco.el);
 
    },
 
 
    // public method.
    change : function (icon) {
 
        DynFavIco.el.innerHTML = '<link rel="shortcut icon" href="'+icon+'">';
 
    }
 
}
 
DynFavIco.init();