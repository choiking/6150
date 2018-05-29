System.register([], function(exports_1, context_1) {
    "use strict";
    var __moduleName = context_1 && context_1.id;
    var BooksService;
    return {
        setters:[],
        execute: function() {
            BooksService = (function () {
                function BooksService() {
                }
                BooksService.prototype.getBooks = function () {
                    return ["Harry Potter", "1984", "UP"];
                };
                return BooksService;
            }());
            exports_1("BooksService", BooksService);
        }
    }
});
//# sourceMappingURL=books.service.js.map