import Home from '../views/Home';
import Petani from '../views/Petani';

export default{
	mode : 'history',

	routes : [
		{
		path : '/',
		name : 'Home',
		component : Home

		},
		{
		path : '/petani',
		name : 'Petani',
		component : Petani

		},

	]

}