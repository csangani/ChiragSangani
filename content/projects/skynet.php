<div class="ContentWrapper WhiteBackground ContentTop">
    <div class="Content clearfix">
        <div class="Full">
            <div class="XXL AllCaps SemiBold">Skynet</div>
            <p class="M">Skynet is a framework architecture for efficiently simulating large feed-forward neural networks in a distributed fashion.</p>
            <img class="ContentImage" src="<?= $assetRoot ?>images/skynet/architecture-dark.png">
    </div>
</div>
</div>
<div class="ContentWrapper LightGrayBackground">
    <div class="Content clearfix">
        <div class="Split Right Center">
            <img class="ContentImage" src="<?= $assetRoot ?>images/skynet/parallel.png">
        </div>
        <div class="Split Left">
            <div class="XL">Distributed Simulation</div>
            <p class="S">Skynet exploits the parallelism inherent in the nature of perceptrons by implementing pipelined simulation of neurons. The resultant architecture resembles the map-reduce algorithm.</p>
        </div>
    </div>
</div>
<div class="ContentWrapper DarkBackground">
    <div class="Content clearfix">
        <div class="Split Left Center">
            <img class="ContentImage" src="<?= $assetRoot ?>images/skynet/speedup.png">
        </div>
        <div class="Split Right">
            <div class="XL">Linear Speedup</div>
            <p class="M">The time needed to simulate a test halves every time the number of cores are doubled.</p>
            <p class="S">Shown here, the simulation times for the number of threads spawned on a logarithmic scale. The test network comprised of 11,100 nodes and 11 million synapses for 1000 input vectors, and the simulation was run on a 24-core machine.</p>
        </div>
    </div>
</div>
<div class="ContentWrapper WhiteBackground">
    <div class="Content clearfix">
        <div class="Split Right Center">
            <img class="ContentImage" src="<?= $assetRoot ?>images/skynet/superlinear.png">
        </div>
        <div class="Split Left">
            <div class="XL">Super-Linear Scalability</div>
            <p class="M">As the number of input vectors is increased, the simulation time scales up super-linearly.</p>
            <p class="S">Shown here, the simulation times for the number of input vectors on a logarithmic scale. The test network comprised of 11,100 nodes and 11 million synapses for 16 cores, and the simulation was run on a 24-core machine.</p>
        </div>
    </div>
</div>
<div class="ContentWrapper CrimsonBackground">
    <div class="Content clearfix">
        <div class="Full">
            <div class="XXL SemiLight">Get it now.</div>
        </div>
        <div class="Split Left Center">
            <p class="XL">Code</p>
            <p><a href="https://github.com/csangani/Skynet"><img class="ContentImage" src="<?= $assetRoot ?>images/github.png"></a></p>
        </div>
        <div class="Split Right Center">
            <p class="XL">Paper</p>
            <p><a href="<?= $assetRoot ?>PDF/Skynet.pdf"><img src="<?= $assetRoot ?>images/pdf-light.png"></a></p>
        </div>
    </div>
</div>