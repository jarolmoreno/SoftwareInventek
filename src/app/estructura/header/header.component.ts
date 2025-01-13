import { Component } from '@angular/core';
//import { Router } from 'express';
import { Router } from '@angular/router'; 
@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrl: './header.component.scss'
})
export class HeaderComponent {

  nombre: any;


constructor(private router: Router){}
  ngOnInit(): void{

    this.nombre =sessionStorage.getItem("nombre");

  }

cerrar(){
  sessionStorage.setItem("id","")
    sessionStorage.setItem("email","")
    sessionStorage.setItem("nombre","")
    this.router.navigate(['login']); 
}

}
