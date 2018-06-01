
import {of as observableOf,  Observable } from 'rxjs';
import { Injectable } from '@angular/core';
import { genreType } from './products.model';
import { productsS } from './products.mock-data';


@Injectable()
export class MainService {

  productsList:any[] = productsS;

  genres = genreType;

  getproductss(): Observable<any> {
    return observableOf(this.productsList);
  }

  getcartproducts(id): Observable<any> {
    let selectedproducts = this.productsList.filter(products => products.id === id);
    return observableOf(selectedproducts[0]);
  }

  getGenres(): Observable<any> {
    return observableOf(this.genres);
  }

}
