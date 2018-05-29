import {Component} from 'angular2/core'
import {UsersService} from './users.service'


@Component ({
	selector: 'users',
	template: `
	     <h1>Nansheng's Info</h1>
	     <p>{{ name }}</p>
	     <p>{{ address }}</p>
	     <p>{{ email }}</p>
	`,
	providers: [UsersService]
})



export class UsersComponent {
	name = 'Nansheng Tu';
	address: string;
	email = 'nansheng@husky.neu.edu'
    constructor(usersService: UsersService) {
         this.address = usersService.getAddress();
    }
}