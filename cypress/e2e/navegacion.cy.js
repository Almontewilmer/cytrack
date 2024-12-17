describe('Prueba de navegación después de iniciar sesión', () => {
    it('Navega por la aplicación después de iniciar sesión', () => {
        // Visitar la página de login
        cy.visit('http://localhost/cmtrack/cm/login.php'); // Ajusta la URL según tu sistema

        // Llenar el formulario de login
        cy.get('input[name="email"]').type('usuario@gmail.com');
        cy.get('input[name="password"]').type('1234');
        cy.get('button[type="submit"]').click();
cy.wait(1000);
	cy.visit('http://localhost/cmtrack/cm/agregarperiodo.php');
         cy.wait(2000);
	cy.visit('http://localhost/cmtrack/cm/grafica.php');
         cy.wait(2000);
cy.visit('http://localhost/cmtrack/cm/ajustes.php');
         cy.wait(2000);
cy.visit('http://localhost/cmtrack/cm/notas.php');
         cy.wait(2000);
cy.visit('http://localhost/cmtrack/cm/users.php');
         cy.wait(2000);
        });
    });
