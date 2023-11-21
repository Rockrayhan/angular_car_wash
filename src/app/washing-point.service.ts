import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { map } from 'rxjs/operators';
import { WashingPoint } from './washing_points';

@Injectable({
  providedIn: 'root'
})
export class WashingPointService {

  baseUrl = 'https://rayhan.wdpf55.com/Angular_project/api' ;

  constructor(private http: HttpClient) {}

  getAll() {
    return this.http.get(`${this.baseUrl}/services.php`).pipe(
      map((res: any) => {
        return res['data'];
      })
    );
  }
}
