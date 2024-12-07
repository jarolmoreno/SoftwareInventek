import { Component } from '@angular/core';
import { InventarioService } from '../../servicios/inventario.service';

@Component({
  selector: 'app-inventarios',
  templateUrl: './inventarios.component.html',
  styleUrl: './inventarios.component.scss'
})
export class InventariosComponent {

  inventarios: any;

  constructor(private sinventarios:InventarioService){}

  ngOnInit():void{
    this.consulta()
    

  }

  consulta(){
    this.sinventarios.consultar().subscribe((resultado:any)=>{
      this.inventarios =resultado;
    })
  }


}
