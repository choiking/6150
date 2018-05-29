import {Component} from 'angular2/core'

@Component ({
	selector: 'forms',
	template: `
	<h1>My forms</h1>
	<p>Name:</p>
    <input id="name" type="text" placeholder = "{{ namePh }}" />
    <p>Contact Number:</p>
    <input id="name" type="text" placeholder = "{{ phonePh }}" />
	`
})



export class FormsComponent {
	namePh = 'enter your name';
    phonePh = 'enter your phone num';
}