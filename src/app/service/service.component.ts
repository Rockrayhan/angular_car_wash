import { Component, OnInit } from '@angular/core';
import { WashingPoint } from '../washing_points'; //interface
import { WashingPointService } from '../washing-point.service';  // service page


@Component({
  selector: 'app-service',
  templateUrl: './service.component.html',
  styleUrls: ['./service.component.css']
})
export class ServiceComponent implements OnInit {
    washingPoints: WashingPoint [] = [];
    error = '' ;
    success= '' ;
    washingPoint:WashingPoint = { id: 0,
    washingPointName: '',
    washingPointAddress: '',
    contactNumber: 0,
    }

    constructor ( private washService: WashingPointService ) {
    }

   ngOnInit() {
    this.getServices()
   }
   getServices(): void {
    this.washService.getAll().subscribe(
      (data:WashingPoint [])=>{
        console.log(data);
        
      }
    )
   }
      
    
}
