
function cokeScene(){	//display coke
    nSwitch = 0;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function spriteScene(){	//display sprite
    nSwitch = 1;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function pepperScene(){	//display appletiser
    nSwitch = 2;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}





var spinning = false;
function spin()
{
	spinning = !spinning;
	document.getElementById('model__TimerCan').setAttribute('enabled', spinning.toString());	//(in code, remember that the DEF is without "model__")
	document.getElementById('model__Timer').setAttribute('enabled', spinning.toString());
	document.getElementById('model__TimerGlass').setAttribute('enabled', spinning.toString());
}





function stopRotation()
{
	spinning = false;
	document.getElementById('model__TimerCan').setAttribute('enabled', spinning.toString());
	document.getElementById('model__Timer').setAttribute('enabled', spinning.toString());
	document.getElementById('model__TimerGlass').setAttribute('enabled', spinning.toString());
}





function animateModel()
{
    if(document.getElementById('model__TimerCan').getAttribute('enabled')!= 'true')
	{
        document.getElementById('model__TimerCan').setAttribute('enabled', 'true');
		document.getElementById('model__Timer').setAttribute('enabled', 'true');
		document.getElementById('model__TimerGlass').setAttribute('enabled', 'true');
	}
    else	//if it was animating, stop it
	{
        document.getElementById('model__TimerCan').setAttribute('enabled', 'false');
		document.getElementById('model__Timer').setAttribute('enabled', 'false');
		document.getElementById('model__TimerGlass').setAttribute('enabled', 'false');
	}
}





function wireFrame()	//cycle through the different renders
{
	var e = document.getElementById('wire');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}





var headLightOn = true;
function headLight()	//not making a noticable difference to the model to the eye, it is working though
{
	headLightOn = !headLightOn;
	document.getElementById('model__headlight').setAttribute('headlight', headLightOn.toString());
	console.log(document.getElementById('model__headlight').getAttribute('headlight'));
}





var omniLightOn = true;
function omniLight()	//each model has 6 omni lights
{
	omniLightOn = !omniLightOn;
	document.getElementById('model__Omni001').setAttribute('on', omniLightOn.toString());
	document.getElementById('model__Omni002').setAttribute('on', omniLightOn.toString());
	document.getElementById('model__Omni003').setAttribute('on', omniLightOn.toString());
	document.getElementById('model__Omni004').setAttribute('on', omniLightOn.toString());
	document.getElementById('model__Omni005').setAttribute('on', omniLightOn.toString());
	document.getElementById('model__Omni006').setAttribute('on', omniLightOn.toString());

	console.log(document.getElementById('model__Omni001').getAttribute('on'));
}





function targetLight()	//not using this
{
	lightOn = !lightOn;
	document.getElementById('model__targetLight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}




function cameraFront()	//front camera is the same as default
{
	document.getElementById('model__CameraFront').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('model__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__CameraRight').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('model__CameraTop').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('model__CameraBottom').setAttribute('bind', 'true');
}