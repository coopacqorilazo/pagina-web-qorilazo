const btnDepartamentos = document.getElementById('btn-departamentos'),
	btnCerrarMenu = document.getElementById('btn-menu-cerrar'),
	subMenu = document.getElementById('subMenu'),
	enlaceNav = document.getElementById("enlacesNav"),
	link = document.getElementById('linkMenu'),
	btnLinks = document.getElementById('btnLinks'),
	contenedorEnlacesNav = document.querySelector('#menu .contenedor-enlaces-nav'),
	contenedorSubCategorias = document.querySelector('.grid .contenedor-subcategorias'),
	esDispositivoMovil = () => window.innerWidth <= 1000;

/*btnDepartamentos.addEventListener('mouseover', () => {
	if(!esDispositivoMovil()){
		grid.classList.add('activo');
	}
});*/
/*
enlaceNav.addEventListener('mouseleave', (e) => {
	if (!esDispositivoMovil()) {
		document.querySelectorAll('#subMenu .categorias').forEach((categoria) => {
			///categoria.classList.remove('activo');

			/*	document.querySelectorAll('.subcategoria').forEach((subcategoria) => {
					subcategoria.classList.remove('activo');
				});
		});
	}
});*/


subMenu.addEventListener('mouseleave', (e) => {
	closeDesp()
});

function closeDesp() {
	if (!esDispositivoMovil()) {
		document.querySelectorAll('#subMenu .contenedor-subcategorias').forEach((conten) => {
			conten.classList.remove('activo');
		});
		document.querySelectorAll('#subMenu .categorias').forEach((categoria) => {
			categoria.classList.remove('activo');
		});
		
		document.querySelectorAll('.subcategoria').forEach((subcategoria) => {
			subcategoria.classList.remove('activo');
		});
	}
}




enlaceNav.addEventListener('mouseover', (e) => {
	if (e.target.classList.contains("link")) {
		if (!esDispositivoMovil()) {
			document.querySelectorAll('#subMenu .categorias').forEach((categoria) => {
				categoria.classList.remove('activo');
				document.querySelectorAll('.contenedor-subcategorias').forEach((conte) => {
					conte.classList.remove('activo');
				});
				document.querySelectorAll('.subcategoria').forEach((subcategoria) => {
					subcategoria.classList.remove('activo');
				});
				if (categoria.dataset.super == e.target.dataset.super) {
					categoria.classList.add('activo');
				}
			});
		};
	}
	if (e.target.classList.contains("logo")) {
		closeDesp()
	}
})

document.querySelectorAll('#subMenu .categorias a').forEach((elemento) => {
	elemento.addEventListener('mouseenter', (e) => {
		if (!esDispositivoMovil()) {
			document.querySelectorAll('.contenedor-subcategorias').forEach((contenedor)=>{
				contenedor.classList.remove('activo')
				if (contenedor.dataset.content == e.target.dataset.content) {
					contenedor.classList.add('activo');					
				}
			});


			document.querySelectorAll('.subcategoria').forEach((subcategoria) => {
				
				subcategoria.classList.remove('activo');				
				if (subcategoria.dataset.categoria == e.target.dataset.categoria) {
					subcategoria.classList.add('activo');					
				}
			});
		};
	});
});
//////////////////////////////////////////
// EventListeners para dispositivo movil.
document.querySelector('#btn-menu-barras').addEventListener('click', (e) => {
	e.preventDefault();
	if (link.classList.contains('activo')) {
		link.classList.remove('activo')
		btnLinks.classList.remove('activo')
		//document.querySelector('body').style.overflow = 'visible';
	} else {
		link.classList.add('activo')
		btnLinks.classList.add('activo')
		//document.querySelector('body').style.overflow = 'hidden';
	}
});

// Click en boton de todos los departamentos (Para version movil).
/*btnDepartamentos.addEventListener('click', (e) => {
	e.preventDefault();
	grid.classList.add('activo');
	btnCerrarMenu.classList.add('activo');
});*/

enlaceNav.addEventListener('click', (e) => {
	if (e.target.classList.contains("link")) {
		//if (!esDispositivoMovil()) {
		e.preventDefault()
		if (link.classList.contains('activo')) {
			link.classList.remove('activo')
			btnLinks.classList.remove('activo')
			//document.querySelector('body').style.overflow = 'visible';
		}
		document.querySelectorAll('#subMenu .categorias').forEach((categoria) => {
			categoria.classList.remove('activo');
			document.querySelectorAll('.subcategoria').forEach((subcategoria) => {
				subcategoria.classList.remove('activo');
			});
			if (categoria.dataset.super == e.target.dataset.super) {
				categoria.classList.add('activo');
			}
		});
	};
})



document.querySelectorAll('#subMenu .categorias a').forEach((elemento) => {
	elemento.addEventListener('click', (e) => {

		//alert("message")
		document.querySelectorAll('.subcategoria').forEach((subcategoria) => {
			subcategoria.classList.remove('activo');
			if (subcategoria.dataset.categoria == e.target.dataset.categoria) {
				subcategoria.classList.add('activo');
			}
		});

	});
});
//Boton regresar de categoria
document.querySelectorAll('#subMenu .categorias .btn-regresar').forEach((btn) => {
	btn.addEventListener('click', (e) => {
		//alert("message")
		document.querySelectorAll('#subMenu .categorias').forEach((categoria) => {
			categoria.classList.remove('activo');
			link.classList.add('activo')
			btnLinks.classList.add('activo')
		})
	})
})
//Boton regresar de subcategoria
document.querySelectorAll('#subMenu .subcategoria .btn-regresar').forEach((btn) => {
	btn.addEventListener('click', (e) => {
		document.querySelectorAll('#subMenu .subcategoria').forEach((sub) => {
			sub.classList.remove('activo');
		})
	})
})


btnCerrarMenu.addEventListener('click', (e) => {
	e.preventDefault();
	document.querySelectorAll('#menu .activo').forEach((elemento) => {
		elemento.classList.remove('activo');
	});
	document.querySelector('body').style.overflow = 'visible';
});