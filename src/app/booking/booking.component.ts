import { Component } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-booking',
  templateUrl: './booking.component.html',
  styleUrls: ['./booking.component.css']
})
export class BookingComponent {

  constructor(private http:HttpClient ){
  
  }

  onSubmit(data:any){
    this.http.post('https://rayhan.wdpf55.com/Angular_project/api/booking.php', data)
    .subscribe(result=>{
      console.log(result)
      if (result){
        alert("successfully Inserted")
      }
    })
    // console.warn(data);
  }

}
