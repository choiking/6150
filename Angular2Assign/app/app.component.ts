import {Component} from 'angular2/core';
import {BooksComponent} from './books.component';
import {UsersComponent} from './users.component';
import {FormsComponent} from './forms.component';

@Component({
    selector: 'my-app',
    template: `
		    <books></books>
		    <users></users>
		    <forms></forms>
		    `,

    directives: [BooksComponent, UsersComponent, FormsComponent]
})
export class AppComponent { }