<div class="ContentWrapper WhiteBackground ContentTop">
    <div class="Content clearfix">
        <div class="Full">
            <div class="XXL AllCaps SemiBold">Skynet</div>
            <p class="M">Skynet is a framework architecture for efficiently simulating large feed-forward neural networks in a distributed fashion.</p>
                <div class="ContentImage" style="background-image:url('<?= $assetRoot ?>images/skynet/architecture-dark.png');height:550px;"></div>
        </div>
    </div>
</div>
<div class="ContentWrapper LightGrayBackground">
    <div class="Content clearfix">
        <div class="Split">
            <div class="XL">Distributed Simulation</div>
            <p class="S">Skynet exploits the parallelism inherent in the nature of perceptrons by implementing pipelined simulation of neurons. The resultant architecture resembles the map-reduce algorithm.</p>
        </div>
        <div class="Split">
            <div class="ContentImage" style="background-image:url('<?= $assetRoot ?>images/skynet/parallel.png');height:450px"></div>
        </div>
    </div>
</div>
<div class="ContentWrapper DarkBackground">
    <div class="Content clearfix">
        <div class="Split">
            <div class="ContentImage" style="background-image:url('<?= $assetRoot ?>images/skynet/speedup.png');height:380px"></div>
        </div>
        <div class="Split">
            <div class="XL">Linear Speedup</div>
            <p class="M">The time needed to simulate a test halves every time the number of cores are doubled.</p>
            <p class="S">Shown here, the simulation times for the number of threads spawned on a logarithmic scale. The test network comprised of 11,100 nodes and 11 million synapses for 1000 input vectors, and the simulation was run on a 24-core machine.</p>
        </div>
    </div>
</div>
<div class="ContentWrapper WhiteBackground">
    <div class="Content clearfix">
        <div class="Split">
            <div class="XL">Super-Linear Scalability</div>
            <p class="M">As the number of input vectors is increased, the simulation time scales up super-linearly.</p>
            <p class="S">Shown here, the simulation times for the number of input vectors on a logarithmic scale. The test network comprised of 11,100 nodes and 11 million synapses for 16 cores, and the simulation was run on a 24-core machine.</p>
        </div>
        <div class="Split">
            <div class="ContentImage" style="background-image:url('<?= $assetRoot ?>images/skynet/superlinear.png');height:430px"></div>
        </div>
    </div>
</div>
<div class="ContentWrapper CrimsonBackground">
    <div class="Content clearfix">
        <div class="Full">
            <div class="XXL SemiLight">Get it now.</div>
        </div>
        <div class="Split" style="text-align:center">
            <div class="XL">Code</div>
            <a style="width:200px;height:40px;display:inline-block;margin:30px 0;background:url('<?= $assetRoot ?>images/github.png') center center no-repeat" href="https://github.com/csangani/Skynet"></a>
        </div>
        <div class="Split" style="text-align:center">
            <div class="XL">Paper</div>
            <a style="width:123px;height:40px;display:inline-block;margin:30px 0;background:url('<?= $assetRoot ?>images/pdf-light.png') center center no-repeat" href="<?= $assetRoot ?>PDF/Skynet.pdf"></a>
        </div>
    </div>
</div>