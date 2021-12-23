var scene, camera, renderer;

scene = new THREE.Scene();
scene.background = new THREE.Color(0xff5f0f);

camera = new THREE.PerspectiveCamera(50, window.innerWidth / window.innerHeight);
camera.position.set(0, 100, 1000);

renderer = new THREE.WebGLRenderer();
renderer.setSize(window.innerWidth, window.innerHeight)
document.body.appendChild(renderer.domElement);

var loader = new THREE.GLTFLoader();
loader.load('../Assets/car.gltf',
    function(gltf) {
        scene.add(gltf.scene);
    })

window.addEventListener('resize', function() {
    renderer.setSize(window.innerWidth, window.innerHeight)
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.a
})


function animate() {
    requestAnimationFrame(animate);
    renderer.render(scene, camera)

}
animate();
