import * as THREE from '/three.js-master/three.js-master/build/three.module.js'
import {GLTFLoader} from '../three.js-master/three.js-master/examples/jsm/loaders/GLTFLoader.js'
import { OrbitControls } from '../three.js-master/three.js-master/examples/jsm/controls/OrbitControls.js'


const canvas = document.querySelector('.webgl')
const scene = new THREE.Scene()
const loader = new GLTFLoader()

loader.load('../Assets/car.gltf', function(gltf){
    console.log(gltf)
    const mesh = gltf.scene;
    mesh.position.set(0,-.3,0)
    mesh.scale.set(1,1,1)
    scene.add(mesh);

})

const light = new THREE.DirectionalLight(0xffffff,2)
light.position.set(2,2,2)
scene.add(light)

const light2 = new THREE.AmbientLight( 0xffffff ); // soft white light
scene.add( light2 );



const sizes = {
    width: window.innerWidth,
    height: window.innerHeight
}

const camera = new THREE.PerspectiveCamera(80,sizes.width/sizes.height,0.1,100)
camera.position.set(0,1,5)
scene.add(camera)

const renderer = new THREE.WebGL1Renderer({
    canvas: canvas
})


renderer.setSize(sizes.width, sizes.height)
renderer.setPixelRatio(Math.min(window.devicePixelRatio,2))
renderer.shadowMap.enabled = true
renderer.gammaOuput = true

const controls = new OrbitControls( camera, renderer.domElement );
controls.autoRotate=true;
controls.enableZoom=false;

function animate(){
    requestAnimationFrame(animate)
    controls.update();
    renderer.render(scene,camera)
}

window.addEventListener( 'resize', onWindowResize, false );
function onWindowResize(){

    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();

    renderer.setSize( window.innerWidth, window.innerHeight );

}

animate()
