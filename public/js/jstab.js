(function(doc){
    'use strict'
    let tabss = Array.from(doc.getElementsByClassName("tab"));
    let container =Array.from(doc.getElementsByClassName("content_info"));
    doc.getElementById("tabs").addEventListener('click', e =>{
        if(e.target.classList.contains("tab")){
           let i=tabss.indexOf(e.target);
           tabss.map(t=>t.classList.remove('active'));
           tabss[i].classList.add('active');
           container.map(p=>p.classList.remove('active'));
           container[i].classList.add('active');
        }
    })

})(document);

