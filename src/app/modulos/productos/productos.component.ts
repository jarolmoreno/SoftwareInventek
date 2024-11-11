import { Component } from '@angular/core';
import { ProductoService } from '../../servicios/producto.service';

@Component({
  selector: 'app-productos',
  templateUrl: './productos.component.html',
  styleUrl: './productos.component.scss'
})

export class ProductosComponent {

  producto: any;

  constructor(private sproducto:ProductoService){}

  ngOnInit():void{
    this.consulta()
    

  }

  consulta(){
    this.sproducto.consultar().subscribe((resultado:any)=>{
      this.producto =resultado;
    })
  }
}
