(function(){
    let info = Array.from(document.querySelectorAll('.container-carrusel .carrusel'))
    let position = Array.from(document.querySelectorAll('.selector>span'))    
   
    let indice =0
 
    const interval = setInterval( ()=>{
        mostrar(indice+=1)
    }, 5000)

    const mostrar = (ind)=>{
        if(ind>=info.length) indice = 0
        if(ind<0) indice = info.length-1
        info.map(t=>t.classList.remove('active'))
        position.map(p=>p.classList.remove('selected'))
        info[indice].classList.add('active')
        position[indice].classList.add('selected')
    }

    document.getElementById('select').addEventListener('click',e=>{
        if(e.target.classList.contains('pos')){
           let p = position.indexOf(e.target)  
           mostrar(indice=p)       
        }
    })


}())