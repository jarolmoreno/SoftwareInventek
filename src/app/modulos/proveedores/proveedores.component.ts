import { Component } from '@angular/core';
import { ProveedorService } from '../../servicios/proveedor.service';

@Component({
  selector: 'app-proveedores',
  templateUrl: './proveedores.component.html',
  styleUrl: './proveedores.component.scss'
})
export class ProveedoresComponent {

  proveedores: any;

  constructor(private sproveedores: ProveedorService){}

  ngOnInit():void{
    this.consulta()
    

  }

  consulta(){
    this.sproveedores.consultar().subscribe((resultado:any)=>{
      this.proveedores =resultado;
    })
  }
}
