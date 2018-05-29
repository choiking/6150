import {Component} from 'angular2/core'
import {BooksService} from './books.service'

@Component ({
	selector: 'books',
	template: `
	<h2>Books</h2>
	{{ title }}
    <ul>
	    <li *ngFor="#book of books">
	       {{ book }}
	    </li>
    </ul>
	`,
	providers: [BooksService]
})



export class BooksComponent {
	title = "my books list";
	books: string[];
    constructor(booksService: BooksService) {
         this.books = booksService.getBooks();
    }
}