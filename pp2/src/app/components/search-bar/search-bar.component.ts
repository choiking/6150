
import {fromEvent as observableFromEvent,  Observable } from 'rxjs';

import {map, distinctUntilChanged, debounceTime} from 'rxjs/operators';
import { Component, OnInit, Output, EventEmitter, ViewChild, ElementRef } from '@angular/core';

import "rxjs/add/operator/debounceTime";
import "rxjs/add/operator/distinctUntilChanged";



@Component({
  selector: 'app-search-bar',
  templateUrl: './search-bar.component.html',
  styleUrls: ['./search-bar.component.scss']
})
export class SearchBarComponent implements OnInit {
  @ViewChild('searchInput') searchInput: ElementRef;
  @Output() searchChange = new EventEmitter();

  constructor() { }

  ngOnInit() {
    observableFromEvent(
      this.searchInput.nativeElement, 'keyup'
    ).pipe(
    debounceTime(500),
    distinctUntilChanged(),
    map(
      (event: KeyboardEvent) => 
        (<HTMLInputElement>event.target).value
      
    ),).subscribe(value => this.searchChange.emit(value));
  }

}
