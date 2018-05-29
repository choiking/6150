var __extends = (this && this.__extends) || (function () {
    var extendStatics = Object.setPrototypeOf ||
        ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
        function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
//defining a class
var User = /** @class */ (function () {
    function User(nameOfUser, passwordOfUser) {
        this.userName = nameOfUser;
        this.password = passwordOfUser;
    }
    User.prototype.getUserName = function () {
        return (this.userName);
    };
    User.prototype.getPassword = function () {
        return (this.password);
    };
    return User;
}());
//inheritance
var Employee = /** @class */ (function (_super) {
    __extends(Employee, _super);
    //optional and default parameters
    function Employee(nameOfUser, passwordOfUser, typeOfUser) {
        var _this = _super.call(this, nameOfUser, passwordOfUser) || this;
        _this.type = typeOfUser;
        return _this;
    }
    return Employee;
}(User));
var users = new Array(new Employee("ruchira", "ruchira", "Engineer"), new Employee("admin", "admin", "Admin"));
function validate() {
    var flag = false;
    var empType;
    for (var i = 0; i < users.length; i++) {
        console.log(users[i].type); //use i instead of 0
        var inputValue = document.getElementById('email').value;
        if (users[i].userName == inputValue) {
            flag = true;
            empType = users[i].type;
        }
    }
    if (flag) {
        document.getElementById('message').innerHTML = 'Form Submitted for employee type' + empType;
        document.getElementById('message').className = 'alert alert-info';
    }
    else {
        document.getElementById('message').innerHTML = 'No employee found';
        document.getElementById('message').className = 'alert alert-danger';
    }
}
//# sourceMappingURL=msg.js.map