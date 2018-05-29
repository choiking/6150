System.register([], function(exports_1, context_1) {
    "use strict";
    var __moduleName = context_1 && context_1.id;
    var UsersService;
    return {
        setters:[],
        execute: function() {
            UsersService = (function () {
                function UsersService() {
                }
                UsersService.prototype.getAddress = function () {
                    return "Northeastern University";
                };
                return UsersService;
            }());
            exports_1("UsersService", UsersService);
        }
    }
});
//# sourceMappingURL=users.service.js.map