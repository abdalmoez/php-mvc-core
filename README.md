# Php mvc core
** PHP MVC Core gives you a powerful, patterns-based way to build static and dynamic websites that enables a clean separation of concerns and gives you full control over markup for enjoyable, agile development. 

** Note: This framework doesn't need any database to create instead to get started.

## Project structure
** The boostrap class will fetch the Controller based on the url using this rule: www.example.com/ControllerName/Method/Args[0]/Args[1]/.../Args[n]
** If the Method is not specified it will call the method called main in the controller.
** A Controller can be called if his static method isEnable() return true.
** If there is no controller specified it will redirect to home controller(It can be change in Bootstrap class).
** PageBuilder is used to build the page by including all vues specified in the controller method 'getPageContent()'
** JSLogger class is used to print all the messages in browser console after loading the page.
** ErrorHandler will handle all type of errors. You can specify your errors(404,...) redirections here.
** ScriptManager is used to add custom scripts in the page
** StyleManager is used to add custom css styles in the page


