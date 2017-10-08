window.onload=function(){
    var html=document.getElementById("html"),
        css=document.getElementById("css"),
        js=document.getElementById("js"),
        output=document.getElementById("output"),
        working=false,
        fill=function(){
            if(working){
                return false;
            }
            working=true;
            var document=output.contentDocument,
                style=document.createElement("style"),
                script=document.createElement("script");
            document.body.innerHTML=html.value;
            style.innerHTML=css.value.replace(/\s/g,"");
            script.innerHTML=js.value;
            document.body.appendChild(style);
            document.body.appendChild(script);
            working=false;
        };
    html.onkeyup=fill;
    css.onkeyup=fill;
    js.onkeyup=fill;
}
