import { Component } from '@angular/core';
import { ComprasService } from '../../servicios/compras.service';

@Component({
  selector: 'app-compras',
  templateUrl: './compras.component.html',
  styleUrl: './compras.component.scss'
})
export class ComprasComponent {

  compras: any;

  constructor(private scompras:ComprasService){}

  ngOnInit():void{
    this.consulta()
    

  }

  consulta(){
    this.scompras.consultar().subscribe((resultado:any)=>{
      this.compras =resultado;
    })
  }

}
