describe('Prueba de carga y estrés', () => {
    it('Llenar el formulario de registro 10 veces', () => {
        cy.visit('http://localhost/cmtrack/cm/register.php'); // URL del formulario de registro

        // Simulamos llenar el formulario 10 veces
        Cypress._.times(10, () => {
	    const fixedDate = '2000-12-12';
            cy.get('input[name="nombreuser"]').type('Usuario Test');
            cy.get('input[name="email"]').type(`usuario${Math.random().toString(36).substring(2)}@prueba.com`); // Genera un correo único
            cy.get('input[name="apellidouser"]').type('test');
            cy.get('input[name="telefono"]').type('8095769999');
	    cy.get('input[name="password"]').type('Contrasena123');
            cy.get('input[name="nacimientodouser"]').type(fixedDate);

            // Enviar el formulario
            cy.get('button[type="submit"]').click();
            cy.visit('http://localhost/cmtrack/cm/register.php');
            // Validar que el registro fue exitoso (ajusta según la respuesta de tu sistema)
            

            // Después de cada envío, puedes esperar un momento o limpiar el formulario para la siguiente iteración
            cy.wait(1000); // Ajusta el tiempo si es necesario
            cy.reload(); // Recarga la página para volver a cargar el formulario
        });
    });

});
