import { Component } from '@angular/core';
import { ProductoService } from '../../servicios/producto.service';
import { ProveedorService } from '../../servicios/proveedor.service';
import { subscribe } from 'node:diagnostics_channel';
import Swal from 'sweetalert2';

@Component({
  selector: 'app-productos',
  templateUrl: './productos.component.html',
  styleUrl: './productos.component.scss'
})

export class ProductosComponent {

  producto: any;
  proveedor: any;
  id_producto: any;
  obj_producto= {
    nombre: "",
    cantidad: "",
    fo_proveedores: ""
  }
  validar_nombre= true;
  validar_cantidad= true;
  validar_proveedor= true;
  mform=false;
  botones_form = false;

  constructor(private sproducto:ProductoService, private sprov: ProveedorService){}

  ngOnInit():void{
    this.consulta()
    this.consulta_p()
    

  }

  consulta(){
    this.sproducto.consultar().subscribe((resultado:any)=>{
      this.producto =resultado;
    })

    
  }
  consulta_p(){
    this.sprov.consultar().subscribe((resultado:any)=>{
      this.proveedor =resultado;  
    })

    
  }
  
  mostrar_form(dato: any){
    switch(dato){
      case 'ver':
        
        this.mform= true;
      break;
      case 'no_ver':
        this.mform= false;
        this.botones_form= false;
      break;


    }
  }
  limpiar(){

    this.obj_producto= {
      nombre: "",
      cantidad: "",
      fo_proveedores: ""
    }

  }

  validar( funcion: any){

    if(this.obj_producto.nombre ==""){
      this.validar_nombre == false;

    }else{
      this.validar_nombre == true;
    }

    if(this.obj_producto.cantidad == ""){
      this.validar_cantidad == false;

    }else{
      this.validar_cantidad == true;
    }

    if(this.validar_nombre == true && this.validar_cantidad == true && funcion == 'guardar'){
      this.guardar() 
    }
    if(this.validar_nombre == true && this.validar_cantidad == true && funcion == 'editar'){
      this.editar() 
    }

  }
  guardar(){
    this.sproducto.insertar(this.obj_producto).subscribe((datos:any) => {
      if (datos['resultado'] =='OK'){
        this.consulta();

      }

    } );
   this.limpiar();//this.limpiar();  
   this.mostrar_form('no_ver');

  }

  eliminar(id: number){
    Swal.fire({
      title: "Esta seguro de eliminar el producto ?",
      text: "El proceso no podra ser revertido",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "si, Eliminar!",
      cancelButtonText: "Cancelar"
    }).then((result) => {
      if (result.isConfirmed) {
        ////////////////////
        this.sproducto.eliminar(id).subscribe((datos:any) => {
          if (datos('resultado')== 'OK'){
            this.consulta;
          }
        });

        /////////////////////

        Swal.fire({
          title: "Producto Eliminado",
          text: "El producto ha sido eliminado",
          icon: "success"
        });
      }
    });
    

  }
cargar_datos(item: any, id: number ){
  this.obj_producto= {
    nombre: item.nombre,
    cantidad:  item.cantidad,
    fo_proveedores: item.proveedor

  }
  this.id_producto = id; 
  this.botones_form = true;
  this.mostrar_form('ver');


}

editar(){
  this.sproducto.editar(this.id_producto, this.obj_producto).subscribe((datos:any) => {
    if(datos('resultado')== 'OK'){
      this.consulta;
    }
  });

  this.limpiar();//this.limpiar();  
  this.mostrar_form('no_ver');
}



}

