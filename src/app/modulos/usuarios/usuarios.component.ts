import { Component } from '@angular/core';
import { UsuarioService } from '../../servicios/usuario.service';

@Component({
  selector: 'app-usuarios',
  templateUrl: './usuarios.component.html',
  styleUrl: './usuarios.component.scss'
})
export class UsuariosComponent {
  usuario: any;

  constructor(private susuario: UsuarioService){}

  ngOnInit():void{
    this.consulta()
    

  }

  consulta(){
    this.susuario.consultar().subscribe((resultado:any)=>{
      this.usuario =resultado;
    })
  }
}
