const mat = document.querySelectorAll('#materia')
mat.forEach(c => {
    if(c.textContent.includes('Asesoria'))
        c.style.background='cornflowerblue'
    if(c.textContent.includes('Tutoria'))
        c.style.background='green'
    if(c.textContent.includes('Clase'))
        c.style.background='blue'
    if(c.textContent.includes('Gestión'))
        c.style.background='orange'
    if(c.textContent.includes('Investigación'))
        c.style.background='red'
})


const seleccion = document.querySelectorAll('#materia');
const menu = document.getElementById('mostrar-lista')


const createMenu = e => {
    //const menu = document.createElement('div')
    // menu.id = 'context-menu'
    menu.classList.add('context-menu')
    //console.log(menu)
    // const prevMenu = document.getElementById('context-menu')
    const prevMenu = document.querySelector('context-menu')
    menu.innerHTML = '<ul><li>Asesoria</li><li>Tutoria</li><li>Clase</li><li>Gestión</li><li>Investigación</li></ul>'

    if(prevMenu)
       // lo contrario de appendChild()
        document.body.removeChild(prevMenu)

    //si se cumple la condicion lo quita, despues crea el nuevo
    document.body.appendChild(menu)

    // menu.style.padding = '1em'
    // menu.style.background = '#eee'
    // menu.style.position = 'absolute'
    menu.style.top = `${e.pageY}px`
    menu.style.left = `${e.pageX}px`
}

seleccion.forEach(elemento => {
    elemento.addEventListener('click', e => {
        //console.log(element.getAttribute('value'))
        createMenu(e)
        //e.preventDefault()

        const lista = document.querySelectorAll('li')
        lista.forEach(element => {
            element.addEventListener('click', l => {
            
                if(l.target.textContent == 'Asesoria'){
                    elemento.textContent = l.target.textContent
                    elemento.style.background = 'cornflowerblue'
                }
                if(l.target.textContent == 'Tutoria'){
                    elemento.textContent = l.target.textContent
                    elemento.style.background = 'green'
                }
                if(l.target.textContent == 'Clase'){
                    elemento.textContent = l.target.textContent
                    elemento.style.background = 'blue'
                }
                if(l.target.textContent == 'Gestión'){
                    elemento.textContent = l.target.textContent
                    elemento.style.background = 'orange'
                }
                if(l.target.textContent == 'Investigación'){
                    elemento.textContent = l.target.textContent
                    elemento.style.background = 'red'
                }
                document.body.removeChild(menu)
            })
        })
    })
})


//const guardar = document.querySelector('.guardar')

//guardar.addEventListener('click', () => {
    //const materias = document.querySelectorAll('#materia')

    // var matriz = new Array(13);
    // for(var i=0;i<13;i++) {
    //     matriz[i] = new Array(6);
    //     matriz[i][0] = i+7;
    //     for(var j=1;j<6;j++){
    //         matriz[i][j] = materias[i].textContent;
    //         console.log(materias[i].textContent)
            
    //     }
    // }
    //let arreglo = new Array(65)
    //for(let i=0;i<65;i++) {
        //arreglo[i] = materias[i].textContent
    //}
    
    // console.log(materias[0].textContent)
    //console.log(arreglo)
    // console.log(arreglo1[64].getAttribute('value'))
//})

