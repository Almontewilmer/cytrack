describe('Pruebas Responsivas', () => {
    const sizes = ['iphone-6', 'ipad-2', [1280, 800]]; // Diferentes resoluciones

    sizes.forEach((size) => {
        it(`Validar la interfaz en resolución ${size}`, () => {
            // Cambia el tamaño de la ventana
            cy.visit('http://localhost/cmtrack/cm/login.php');
 		cy.get('input[name="email"]').type('usuario@gmail.com');
       		cy.get('input[name="password"]').type('1234');
 		cy.get('button[type="submit"]').click();
		
        });
	
    });
});