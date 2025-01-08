import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { PrincipalComponent } from './modulos/principal.component';
import { DashboardComponent } from './modulos/dashboard/dashboard.component';
import { LoginComponent } from './modulos/login/login.component';
import { ProductosComponent } from './modulos/productos/productos.component';
import { UsuariosComponent } from './modulos/usuarios/usuarios.component';
import { ComprasComponent } from './modulos/compras/compras.component';
import { ProveedoresComponent } from './modulos/proveedores/proveedores.component';
import { InventariosComponent } from './modulos/inventarios/inventarios.component';
import { ControlysoporteComponent } from './modulos/controlysoporte/controlysoporte.component';
import { NoEncontroComponent } from './modulos/no-encontro/no-encontro.component';

const routes: Routes = [

  { path: '', component: PrincipalComponent,
  children: [
    { path: 'dashboard', component: DashboardComponent},
    { path: 'usuarios', component: UsuariosComponent},
    { path: 'productos', component: ProductosComponent},
    { path: 'compras', component: ComprasComponent},
    { path: 'proveedores', component: ProveedoresComponent},
    { path: 'inventarios', component: InventariosComponent},
    { path: 'controlysoporte ', component: ControlysoporteComponent},

    { path: '', redirectTo: 'dashboard',pathMatch: 'full'}
   
  ]
},
{ path: 'login', component: LoginComponent },
{ path: '**', component: NoEncontroComponent },


];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
