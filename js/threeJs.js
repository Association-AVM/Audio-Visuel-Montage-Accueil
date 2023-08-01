import * as THREE from 'https://cdn.jsdelivr.net/npm/three@0.121.1/build/three.module.js';
import {GLTFLoader} from 'https://cdn.jsdelivr.net/npm/three@0.121.1/examples/jsm/loaders/GLTFLoader.js'
import { OrbitControls } from 'https://cdn.jsdelivr.net/npm/three@0.121.1/examples/jsm/controls/OrbitControls.js';


const canvas = document.querySelector('.webgl')
const scene = new THREE.Scene()
scene.background = new THREE.Color("#141414")
const loader = new GLTFLoader()

loader.load('../Assets/', function(gltf){
    console.log(gltf)
    const mesh = gltf.scene;
    mesh.position.set(0,-0.5,0)
    mesh.scale.set(1.5,1.5,1.5)
    scene.add(mesh);

})

const light = new THREE.DirectionalLight(0xffffff,3)
light.position.set(1,1,100)
scene.add(light)


const ambientLight = new THREE.AmbientLight( 0xffffff,5 ); // soft white light
scene.add( ambientLight );



const sizes = {
    width: window.innerWidth,
    height: window.innerHeight
}

const camera = new THREE.PerspectiveCamera(80,sizes.width/sizes.height,0.1,100)
camera.position.set(0,2,5)
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
controls.enableRotate=false;
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